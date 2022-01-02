#include <bits/stdc++.h>
using namespace std;
long long int a[7];
int main()
{
   freopen("ABCS.int","r",stdin);
   freopen("ABCS.out","w",stdout);

    for(int i=0;i<7;i++)
    cin>>a[i];
    sort (a,a+7);
    cout<<a[0]<<" "<<a[1]<<" "<<a[6]-a[0]-a[1];
}
