#include <bits/stdc++.h>
using namespace std;
int check(int so[])
{
	sort (so,so+7);
	do {if (so[6]!=so[0]+so[1]+so[2])continue;
        if (so[3]!=so[0]+so[1])continue;
        if (so[4]!=so[1]+so[2])continue;
        if (so[5]!=so[0]+so[2])continue;
    } while (next_permutation(so,so+7));
   for (int i=1;i<=7;i++)cout<<so[i];
}
int main ()
{
	freopen ("abcs.inp","r",stdin);
	freopen ("abcs.out","w",stdout);
	int so[100000000];
	int n;
	for (int i=1;i<=7;i++) cin>>n;
	check (so);

}
