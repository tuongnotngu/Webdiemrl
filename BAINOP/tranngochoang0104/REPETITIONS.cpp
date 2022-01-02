#include <bits/stdc++.h>
using namespace std;
string s;
int main()
{
	int maxx,dem;
	freopen ("repetitions.inp","r",stdin)
	freopen ("repetitions.out","w",stdout)
	getline(cin,s);
	for (int i=0;i<s.size();i++)
		if (s[i]==s[i+1]) dem++;
	else
		if(dem>maxx) dem=maxx;
	cout << maxx;
}
